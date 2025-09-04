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



use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Отзывы, привязанные к конкретной странице
Container::make('post_meta', 'Блок отзывов')
    ->where('post_type', '=', 'page')
    ->add_fields([
        Field::make('text', 'reviews_title', 'Заголовок блока'),
        Field::make('complex', 'page_reviews', 'Отзывы')
            ->add_fields([
                Field::make('text', 'name', 'Имя'),
                Field::make('text', 'age', 'Возраст'),
                Field::make('textarea', 'text', 'Текст отзыва'),
                Field::make('image', 'photo', 'Фото клиента'),
                Field::make('date', 'created_at', 'Дата отзыва'),
            ])
    ]);
