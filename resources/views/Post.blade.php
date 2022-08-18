<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <form method="post">
                   	@csrf
                   	<label>title</label>
                   	<input type="text" name="title" placeholder="enter any title">
                   	<label>Body</label>
                   	<input type="text" name="body" placeholder="enter any body">
                   	<label>submit</label>
                   <button type="submit" value="post">submit</button>
    </form>
</x-app-layout>
