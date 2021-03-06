<div class="col-md-12">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption font-red-sunglo">
                <i class="icon-user font-red-sunglo"></i>
                <span class="caption-subject bold uppercase"> Line Inputs</span>
            </div>
            <div class="tools">
                <a href="" class="collapse" data-original-title="" title="">
                </a>
                <a href="" class="remove" data-original-title="" title="">
                </a>
            </div>
        </div>
        <div class="portlet-body form">
            <form role="form" wire:submit.prevent="{{ $form_method }}">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-body ">
                            <div class="form-group form-md-line-input 
                                @error('name') has-error @enderror">
                                <input type="text" class="form-control" id="form_control_1" wire:model.defer="name"
                                    autocomplete="off">
                                <label for="form_control_1" @error('name') style="color: #F3565D" @enderror>
                                    اسم المرفق
                                </label>
                                @error('name')
                                <span id="name-error" class="help-block help-block-error"
                                    style="color: #F3565D">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="padding-right: 25px"
                            class="form-group form-md-radios  @error('place') has-error @enderror">
                            <div class="col-md-12">
                                <label>مكان المرفق</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="place" name="place" class="md-radiobtn" value="1"
                                            wire:model.defer="place">
                                        <label for="place">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            داخلي </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="place2" name="place" class="md-radiobtn" value="0"
                                            wire:model.defer="place">
                                        <label for="place2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            خارجي </label>
                                    </div>
                                    @error('place')
                                    <span id="name-error" class="help-block help-block-error"
                                        style="color: #F3565D">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div style="padding-right: 25px"
                            class="form-group form-md-radios  @error('for_wedding_hall') has-error @enderror">
                            <div class="col-md-12">
                                <label>تخصيص المرفق لقاعة الأفراح</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="for_wedding_hall1" name="for_wedding_hall"
                                            class="md-radiobtn" value="0" wire:model.defer="for_wedding_hall">
                                        <label for="for_wedding_hall1">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            ليس له </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="for_wedding_hall2" name="for_wedding_hall"
                                            class="md-radiobtn" value="1" wire:model.defer="for_wedding_hall">
                                        <label for="for_wedding_hall2">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            مشترك مع غيره </label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="for_wedding_hall3" name="for_wedding_hall"
                                            class="md-radiobtn" value="2" wire:model.defer="for_wedding_hall">
                                        <label for="for_wedding_hall3">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            خاص </label>
                                    </div>
                                    @error('for_wedding_hall')
                                    <span id="name-error" class="help-block help-block-error"
                                        style="color: #F3565D">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions noborder">
                    <button type="submit" class="btn blue">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>