<?php


return [
    /*
     * These are the reactions that can be made on a comment. We highly recommend
     * only enabling positive ones for getting good vibes in your community.
     */
    'allowed_reactions' => ['👍', '🥳', '👀', '😍', '💅'],

    /*
     * A comment processor is a class that will transform the comment text
     */
    'comment_processors' => [
         Spatie\Comments\CommentProcessors\MarkdownToHtmlProcessor::class,
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
        'process_comment' => Spatie\Comments\Actions\ProcessCommentAction::class,
    ],
];
