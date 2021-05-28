<div>
    <div class="codename-card-wide mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Welcome</h2>
        </div>
        <div class="mdl-card__supporting-text">
            Just click the button below to generate a new codename
            <h3>{{ $codename }}</h3>
            <p class="typography-styles-body2">man thanks to <a target="_blank" href="https://random-data-api.com/documentation">https://random-data-api.com/documentation</a>
                <br>
                and the library `
            </p>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <button wire:click="getCodeName" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" wire:loading.attr="disabled" style="min-width: 167.875px;">
                <span>Generate Another</span>
            </button>
        </div>
    </div>
</div>