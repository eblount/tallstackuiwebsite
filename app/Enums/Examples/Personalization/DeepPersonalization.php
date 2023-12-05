<?php

namespace App\Enums\Examples\Personalization;

class DeepPersonalization
{
    public const COMMAND = <<<'HTML'
    php artisan make:component Input
    HTML;

    public const OVERRIDE = <<<'HTML'
    /*
    |--------------------------------------------------------------------------
    | Components List
    |--------------------------------------------------------------------------
    |
    | List of all TallStackUi components.
    */
    'components' => [
        'input' => \App\View\Components\Input::class, // [tl! focus]
        'textarea' => Components\Form\Textarea::class,
        'password' => Components\Form\Password::class,
        'toggle' => Components\Form\Toggle::class,
        'radio' => Components\Form\Radio::class,

        // ...
    ],
    HTML;

    public const EXTENDS = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\View\Components\Form\Input // [tl! highlight]
    {
        public function __construct()
        {
            parent::__construct(); // [tl! highlight]
        }

        public function render(): View
        {
            return view('components.input');
        }
    }
    HTML;

    public const CUSTOMIZATION = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class Input extends \TallStackUi\View\Components\Form\Input
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function personalization(): array // [tl! focus:3]
        {
            return [/* ... */];
        }

        public function render(): View
        {
            return view('components.input');
        }
    }
    HTML;

    public const OVERRIDE_COLORS = <<<'HTML'
    namespace App\View\Components;

    use Illuminate\Contracts\View\View;

    class CustomButton extends \TallStackUi\View\Components\Button\Button // [tl! highlight]
    {
        public function backgroundColor(): array // [tl! highlight]
        {
            return [
                'solid' => [
                    'white' => '...',
                    'black' => '...',
                    'primary' => '...',
                    'secondary' => '...',
                    'slate' => '...',
                    'gray' => '...',
                    'zinc' => '...',
                    'neutral' => '...',
                    'stone' => '...',
                    'red' => '...',
                    'orange' => '...',
                    'amber' => '...',
                    'yellow' => '...',
                    'lime' => '...',
                    'green' => '...',
                    'emerald' => '...',
                    'teal' => '...',
                    'cyan' => '...',
                    'sky' => '...',
                    'blue' => '...',
                    'indigo' => '...',
                    'violet' => '...',
                    'purple' => '...',
                    'fuchsia' => '...',
                    'pink' => '...',
                    'rose' => '...',
                ],
                'outline' => [
                    'white' => '...',
                    'black' => '...',
                    'primary' => '...',
                    'secondary' => '...',
                    'slate' => '...',
                    'gray' => '...',
                    'zinc' => '...',
                    'neutral' => '...',
                    'stone' => '...',
                    'red' => '...',
                    'orange' => '...',
                    'amber' => '...',
                    'yellow' => '...',
                    'lime' => '...',
                    'green' => '...',
                    'emerald' => '...',
                    'teal' => '...',
                    'cyan' => '...',
                    'sky' => '...',
                    'blue' => '...',
                    'indigo' => '...',
                    'violet' => '...',
                    'purple' => '...',
                    'fuchsia' => '...',
                    'pink' => '...',
                    'rose' => '...',
                ],
            ];
        }

        public function iconColor(): array // [tl! highlight]
        {
            return [
                'solid' => [
                    'white' => '...',
                    'black' => '...',
                    'primary' => '...',
                    'secondary' => '...',
                    'slate' => '...',
                    'gray' => '...',
                    'zinc' => '...',
                    'neutral' => '...',
                    'stone' => '...',
                    'red' => '...',
                    'orange' => '...',
                    'amber' => '...',
                    'yellow' => '...',
                    'lime' => '...',
                    'green' => '...',
                    'emerald' => '...',
                    'teal' => '...',
                    'cyan' => '...',
                    'sky' => '...',
                    'blue' => '...',
                    'indigo' => '...',
                    'violet' => '...',
                    'purple' => '...',
                    'fuchsia' => '...',
                    'pink' => '...',
                    'rose' => '...',
                ],
                'outline' => [
                    'white' => '...',
                    'black' => '...',
                    'primary' => '...',
                    'secondary' => '...',
                    'slate' => '...',
                    'gray' => '...',
                    'zinc' => '...',
                    'neutral' => '...',
                    'stone' => '...',
                    'red' => '...',
                    'orange' => '...',
                    'amber' => '...',
                    'yellow' => '...',
                    'lime' => '...',
                    'green' => '...',
                    'emerald' => '...',
                    'teal' => '...',
                    'cyan' => '...',
                    'sky' => '...',
                    'blue' => '...',
                    'indigo' => '...',
                    'violet' => '...',
                    'purple' => '...',
                    'fuchsia' => '...',
                    'pink' => '...',
                    'rose' => '...',
                ],
            ];
        }
    }
    HTML;

    public const VIEWS = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.views
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    content: [
        // ...

        './app/View/Components/**/*.php', // [tl! highlight]
    ],
    HTML;
}
