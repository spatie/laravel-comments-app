<?php


return [
    /*
     * These are the reactions that can be made on a comment. We highly recommend
     * only enabling positive ones for getting good vibes in your community.
     */
    'allowed_reactions' => ['👍', '🥳', '👀', '😍', '💅'],

    /*
     * A comment transformer is a class that will transform the comment text
     * for example from Markdown to HTML
     */
    'comment_transformers' => [
        Spatie\Comments\CommentTransformers\MarkdownToHtmlTransformer::class,
    ],

    'models' => [
        /*
         * The model you want to use as a Comment model. It needs to be or
         * extend the `Spatie\Comments\Models\Comment::class` model.
         */
        'comment' => Spatie\Comments\Models\Comment::class,

        /*
         * The model you want to use as a React model. It needs to be or
         * extend the `Spatie\Comments\Models\Reaction::class` model.
         */
        'reaction' => Spatie\Comments\Models\Reaction::class,

        /*
         *  The user model that will be associated with the comments.
         *
         *  When this is set to null, we'll use the default user model.
         */
        'user' => null,
    ],

    'actions' => [
        /*
         * This class is responsible for storing the input of the user as a comment.
         *
         * Unless you need fine-grained customisation, you don't need to change
         * this class. If you do change it, make sure that your class
         * extends `Spatie\Comments\Actions\ProcessCommentAction`.
         */
        'process_comment' => Spatie\Comments\Actions\ProcessCommentAction::class,
    ],
];
