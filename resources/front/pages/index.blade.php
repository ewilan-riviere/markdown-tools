@extends('front::layouts.app')

@section('default')
    <div class="main-container">
        <div x-data="convert"
            class="rounded-md border border-gray-600 p-6">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
                <x-field.convert x-model="html"
                    @input="convert('html')"
                    name="html"
                    label="HTML code"
                    placeholder="HTML" />
                <x-field.convert x-model="markdown"
                    @input="convert('markdown')"
                    name="markdown"
                    label="Markdown code"
                    placeholder="Markdown" />
            </div>
            <button
                class="mt-6 flex items-center space-x-1 rounded-md px-2 py-1 transition-colors duration-75 hover:bg-gray-800"
                @click="togglePreview()">
                <x-icon.eye x-show="!preview"
                    class="h-5 w-5" />
                <x-icon.eye-off x-show="preview"
                    class="h-5 w-5" />
                <span>Preview</span>
            </button>
            <div x-show="preview"
                x-transition
                class="mt-6 border-t border-gray-700 pt-6">
                <div class="prose-sm prose-invert">
                    <div x-html="html"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
