jQuery( document ).ready(function($) {
	"use strict";


	// Update the values for all our input fields and initialise the sortable repeater
	$('.sortable_repeater_control').each(function() {
		// If there is an existing customizer value, populate our rows		
		var val = $(this).find('.customize-control-sortable-repeater').val();		
		var defaultValuesArray = val ? JSON.parse(val) : [{name: '', desc: '', price: ''}];
		var numRepeaterItems = defaultValuesArray.length;

		if(numRepeaterItems > 0) {
			// Add the first item to our existing input field
			$(this).find('.repeater-input-name').val(defaultValuesArray[0].name);
			$(this).find('.repeater-input-desc').val(defaultValuesArray[0].desc).text(defaultValuesArray[0].desc);
			$(this).find('.repeater-input-price').val(defaultValuesArray[0].price);
			// Create a new row for each new value
			if(numRepeaterItems > 1) {
				var i;
				for (i = 1; i < numRepeaterItems; ++i) {
					ghAppendRow($(this), defaultValuesArray[i].name, defaultValuesArray[i].desc, defaultValuesArray[i].price);
				}
			}
		}
	});

	// Make our Repeater fields sortable
	$(this).find('.sortable_repeater.sortable').sortable({
		update: function(event, ui) {
			ghGetAllInputs($(this).parent());
		}
	});

	// Remove item starting from it's parent element
	$('.sortable_repeater.sortable').on('click', '.customize-control-sortable-repeater-delete', function(event) {
		event.preventDefault();
		var numItems = $(this).parent().parent().parent().find('.repeater').length;

		if(numItems > 1) {
			$(this).parent().parent().slideUp('fast', function() {
				var parentContainer = $(this).parent().parent();
				$(this).remove();
				ghGetAllInputs(parentContainer);
			})
		}
		else {
			$(this).parent().parent().find('.repeater-input-name').val('');
			$(this).parent().parent().find('.repeater-input-desc').val('');
			$(this).parent().parent().find('.repeater-input-price').val('');
			ghGetAllInputs($(this).parent().parent().parent().parent());
		}
	});
    
	// Add new item
	$('.customize-control-sortable-repeater-add').click(function(event) {
		event.preventDefault();
		ghAppendRow($(this).parent());
		ghGetAllInputs($(this).parent());
	});

	// Refresh our hidden field if any fields change
	$('.sortable_repeater.sortable').change(function() {
		ghGetAllInputs($(this).parent());
	})

	// Append a new row to our list of elements
	function ghAppendRow($element, defaultName = '', defaultDesc = '', defaultPrice = '') {
		var placeholders = [
			$element.find('.repeater-input-name').attr('placeholder'),
			$element.find('.repeater-input-desc').attr('placeholder'),
			$element.find('.repeater-input-price').attr('placeholder'),
		];
		var titleNode = $element.find('.customize-control-title');
		var num = $element.find('.repeater').length + 1;
		
		var newRow = '<div class="repeater" style="display:none"><div class="repeater_header"><span>'+(titleNode.length ? (titleNode.data('single') + ' ' + num) : '')+'</span><span class="dashicons dashicons-sort"></span><a class="customize-control-sortable-repeater-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a></div>';
		newRow += '<input type="text" value="'+defaultName+'" class="repeater-input-name" placeholder="'+placeholders[0]+'" />';
		newRow += '<textarea style="width: 100%;" rows="3" value="'+defaultDesc+'" class="repeater-input-desc" placeholder="'+placeholders[1]+'" >' + defaultDesc + '</textarea>';
		newRow += '<input type="text" value="'+defaultPrice+'" class="repeater-input-price" placeholder="'+placeholders[2]+'" /></div>';

		$element.find('.sortable').append(newRow);
		$element.find('.sortable').find('.repeater:last').slideDown('slow', function(){
			$(this).find('input').focus();
		});
	}

	// Get the values from the repeater input fields and add to our hidden field
	function ghGetAllInputs($element) {
		var names = $element.find('.repeater-input-name').map(function() {
			return $(this).val();
		}).toArray();
		var descs = $element.find('.repeater-input-desc').map(function() {
			return $(this).val();
		}).toArray();
		var prices = $element.find('.repeater-input-price').map(function() {
			return $(this).val();
		}).toArray();
		// Add all the values from our repeater fields to the hidden field (which is the one that actually gets saved)
		$element.find('.customize-control-sortable-repeater').val(JSON.stringify(names.map((name, i) => { return {name, desc: descs[i], price: prices[i]} })));
		// Important! Make sure to trigger change event so Customizer knows it has to save the field
		$element.find('.customize-control-sortable-repeater').trigger('change');
	}
});