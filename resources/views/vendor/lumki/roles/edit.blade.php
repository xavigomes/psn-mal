<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('lumki::ui.manage_roles') }} - {{ $role->name }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('lumki.roles.update', $role) }}">
        @csrf
        @method("PUT")
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="space-y-10">
                        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
                            <div class="space-y-6">
                            @foreach ($permissions as $permission)
                                <div class="flex items-center justify-between">
                                    <label class="flex items-center">
                                        <input name="permissions[]" type="checkbox" class="form-checkbox" value="{{ $permission->name }}" {{ $role->getPermissionNames()->contains($permission->name) ? "checked='checked'":"" }}>
                                        <span class="ml-2 text-sm text-gray-600">{{ $permission->name }}</span>
                                    </label>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('lumki::ui.save') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
