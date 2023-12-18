<x-layout :torchlight="false">
    <x-slot:title>
        Get Started
    </x-slot:title>
    <x-section :copy="false">
        <p>
            This is the TallStackUI, a library of ready-to-use components for TALL Stack applications.
            TallStackUI is unlike anything you've ever seen, from its conception to construction and general
            availability. Beforehand we want to tell you a little about our motivation.
        </p>
    </x-section>
    <x-section class="space-y-4" title="Motivation Behinds TallStackUI" :copy="false">
        <p>
            Hey! I'm <a href="https://github.com/devajmeireles" class="underline" target="_blank">AJ</a>,
            creator of TallStackUI and FullStack PHP developer since 10 years ago. I'm passionate about TALL
            Stack and addicted to the Laravel ecosystem, especially <a href="https://pestphp.com" class="underline" target="_blank">Pest</a>,
            the best PHP testing framework that I help maintain.
        </p>
        <p>
            As the owner of a few TALL Stack SaaS, I often came across situations where the component
            library I was using left me without new features, updates, or even worse bugs affecting my
            applications. I decided to stop using component libraries and create my components manually
            – who has never done this? The main problem I found with this was that I needed to recreate
            the components in new projects even if I copied them, which would cost me time and money.
        </p>
        <p>
            TallStackUI is a solution to solve a personal problem while serving the community. <u>The main
                guarantee you will have is the fact that I, the author, and all contributors are the main
                users of the library</u>, guaranteeing useful components and frequent updates.
        </p>
    </x-section>
    <x-slot:navigation>
        <x-slot:next>
            <x-layout.footer-navigation href="{{ route('documentation.installation') }}" text="Installation" />
        </x-slot:next>
    </x-slot:navigation>
</x-layout>
