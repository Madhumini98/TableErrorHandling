<div class="flex space-x-2">
    @foreach ($radios as $radio)
        <div class="flex items-center">
            <input id="{{ $radio['id'] }}" type="radio" value="{{ $radio['value'] }}" name="{{ $name }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" {{ $radio['checked'] ? 'checked' : '' }} {{ $radio['disabled'] ? 'disabled' : '' }}>
            <label for="{{ $radio['id'] }}" class="ml-3 text-sm font-medium {{ $radio['disabled'] ? 'text-gray-400 dark:text-gray-500' : 'text-gray-900 dark:text-gray-300' }}">{{ $radio['label'] }}</label>
        </div>
    @endforeach
</div>
