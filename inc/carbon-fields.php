<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Контент страницы')
    ->where('post_type', '=', 'page')
    ->add_fields([
        // FAQ
        Field::make('separator', 'faq_separator', 'Блок FAQ'),
        Field::make('text', 'faq_title', 'Заголовок FAQ'),
        Field::make('complex', 'faq_items', 'Вопросы и ответы')
            ->add_fields([
                Field::make('text', 'question', 'Вопрос'),
                Field::make('rich_text', 'answer', 'Ответ'),
            ]),

        // Отзывы
        Field::make('separator', 'reviews_separator', 'Блок отзывов'),
        Field::make('text', 'reviews_title', 'Заголовок отзывов'),
        Field::make('complex', 'page_reviews', 'Отзывы')
            ->add_fields([
                Field::make('text', 'name', 'Имя'),
                Field::make('text', 'age', 'Возраст'),
                Field::make('textarea', 'text', 'Текст отзыва'),
                Field::make('image', 'photo', 'Фото клиента'),
                Field::make('date', 'created_at', 'Дата отзыва'),
            ]),

        // Работы
        Field::make('separator', 'raboty_separator', 'Блок работ'),
        Field::make('text', 'raboty_title', 'Заголовок блока работ'),
        Field::make('complex', 'raboty_pairs', 'Пары до/после')
            ->add_fields([
                Field::make('image', 'do', 'Фото ДО попорции оптимально - 360/640'),
                Field::make('image', 'posle', 'Фото ПОСЛЕ попорции оптимально - 360/640'),
            ])
    ]);
