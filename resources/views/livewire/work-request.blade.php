<div class="u-form u-palette-5-dark-3 u-radius-20 u-form-1">
    <form class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 40px" wire:submit.prevent="save">
        <!-- Name Field -->
        <div class="u-form-group u-form-name">
            <label for="name-2137" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Enter your Name" id="name-2137" wire:model="name" class="u-input u-input-rectangle u-radius-20" required />
        </div>

        <!-- Email Field -->
        <div class="u-form-email u-form-group">
            <label for="email-2137" class="u-form-control-hidden u-label"></label>
            <input type="email" placeholder="Enter a valid email address" id="email-2137" wire:model="email" class="u-input u-input-rectangle u-radius-20" required />
        </div>

        <!-- Message Field -->
        <div class="u-form-group u-form-message" x-data="{ count: 0, max: 1000 }">
            <label for="message-2137" class="u-form-control-hidden u-label"></label>
            
            <textarea 
                placeholder="Enter your message" 
                rows="4" cols="50" 
                id="message-2137" 
                wire:model="message" 
                x-ref="messageInput"
                x-on:input="count = $refs.messageInput.value.length; if (count > max) { $refs.messageInput.value = $refs.messageInput.value.substring(0, max); count = max; }"
                class="u-input u-input-rectangle u-radius-20" 
                required>
            </textarea>
            
            <!-- Character Count Display -->
            <div class="text-right text-sm text-gray-400 mt-1">
                <span x-text="count"></span> / <span x-text="max"></span>
            </div>
        </div>
        

        <!-- Submit Button -->
        <div class="u-align-left u-form-group u-form-submit pb-12">
            <button type="button"  wire:click="save" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-white u-radius-20 u-text-active-palette-2-base u-text-hover-custom-color-4 u-btn-1">
                Submit
            </button>
        </div>

        <!-- Success Message -->
        @if (session()->has('message'))
            <div 
                x-data="{ show: true }" 
                x-init="setTimeout(() => show = false, 4000)" 
                x-show="show"
                wire:key="{{ now() }}"
                x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300 transform opacity-0 scale-95"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="u-form-send-message u-form-send-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- General Errors -->
        @if ($errors->any())
        <div 
            x-data="{ show: true }" 
            x-init="setTimeout(() => show = false, 5000)" 
            x-show="show"
            wire:key="{{ now() }}"
            x-transition:enter="transition ease-out duration-300 transform opacity-0 scale-95"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-300 transform opacity-0 scale-95"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="u-form-send-error u-form-send-message">
            Unable to send your message. Please fix errors then try again.
        </div>
        @endif
        
    </form>
</div>
