<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test app</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
        <link rel="stylesheet" href="./css/app.css">
        <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

        @livewireStyles
    </head>
    <body>
        <div class="container m-4">
            <h1>{{ $post->title }}</h1>
            <livewire:comments :model="$post" />
        </div>

        @livewireScripts
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('compose', ({ text, defer = false } = {}) => {
                    // Store the editor as a non-reactive instance property
                    let editor;

                    return {
                        text,

                        init() {
                            if (! defer) {
                                this.load();
                            }
                        },

                        load() {
                            if (editor) {
                                return;
                            }

                            const textarea = this.$el.querySelector('textarea');

                            if (! textarea) {
                                return;
                            }

                            editor = new SimpleMDE({
                                element: textarea,
                                hideIcons: ['heading', 'image', 'preview', 'side-by-side', 'fullscreen', 'guide'],
                                spellChecker: false,
                                status: false,
                            });

                            editor.codemirror.on("change", () => {
                                this.text = editor.value();
                            });
                        },

                        clear() {
                            editor.value('');
                        },
                    };
                });
            });
        </script>
        <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </body>
</html>
