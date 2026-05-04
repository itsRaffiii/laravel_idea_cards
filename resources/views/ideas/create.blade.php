<x-layout>

        </br>
         <form method="POST" action="/ideas">
                @csrf

             <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
                <div class="col-span-full">
                    <legend class="fieldset-legend">Create New Idea</legend>
                            <div class="mt-2">
                                    <textarea id="description" name="description" rows="3"
                                              class="textarea w-full @error('description') textarea-error @enderror"
                                    ></textarea>

                                <x-forms.error name="description" />
                            </div>
                        <p class="mt-3 text-sm/6 text-gray-400">Have an ideas want to save later?</p>
                </div>

                <div class="mt-6 flex items-center gap-x-6">
                        <button type="submit"
                                class="btn">
                            Save
                        </button>
                </div>
             </fieldset>
        </form>

</x-layout>
