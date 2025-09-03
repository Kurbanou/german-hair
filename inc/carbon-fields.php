<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Блок FAQ')
    ->where('post_type', '=', 'page')
    ->add_fields([
        Field::make('text', 'faq_title', 'Заголовок блока'),
        Field::make('complex', 'faq_items', 'Вопросы и ответы')
            ->add_fields([
                Field::make('text', 'question', 'Вопрос'),
                Field::make('rich_text', 'answer', 'Ответ'),
            ])
    ]);
