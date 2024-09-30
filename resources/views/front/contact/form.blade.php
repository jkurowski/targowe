<form id="contact-form" autocomplete="off" class="p-0 p-lg-3 validateForm" action="{{route('contact.form')}}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div id="form-success" class="alert alert-success border-0 mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('warning'))
                <div id="form-errors" class="alert alert-warning border-0 mb-4">
                    {{ session('warning') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            <div class="form-floating mb-3">
                <input type="text" class="validate[required] form-control @error('form_name') is-invalid @enderror" id="user-name" placeholder="Imię i nazwisko" name="form_name" value="{{ old('form_name') }}" required />
                <label for="user-name">Imię i nazwisko</label>
                @error('form_name')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-3">
                <input type="email" class="validate[required,custom[email]] form-control @error('form_email') is-invalid @enderror" id="user-email" placeholder="Adres e-mail" name="form_email" value="{{ old('form_email') }}" required />
                <label for="user-email">Adres e-mail</label>
                @error('form_email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
            <div class="form-floating mb-3">
                <input type="tel" class="validate[required,custom[phone]] form-control @error('form_phone') is-invalid @enderror" id="user-tel" placeholder="Telefon" name="form_phone" value="{{ old('form_phone') }}" required />
                <label for="user-tel">Telefon</label>
                @error('form_phone')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <textarea class="validate[required] form-control @error('form_message') is-invalid @enderror" placeholder="Wiadomość" id="user-message" style="height: 150px" name="form_message" required>{{ old('form_message') }}</textarea>
                <label for="user-message">Wiadomość</label>
                @error('form_message')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>
        </div>
    </div>
    <!-- ACCORDION -->
    <div class="col-12 pt-3">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-contact" type="button" data-bs-toggle="collapse" data-bs-target="#policy-check" aria-expanded="true" aria-controls="policy-check">Klauzula informacyjna</button>
                </h2>
                <div id="policy-check" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        [ Obowiązek ]
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        @foreach ($rules as $r)
            <div class="form-check text-start pt-2 d-flex gap-3">
                <input class="form-check-input @if($r->required === 1)validate[required] @endif" type="checkbox" value="1" id="zgoda_{{$r->id}}" name="rule_{{$r->id}}" data-prompt-position="topLeft:0"/>
                <label class="form-check-label small fw-medium pt-1" for="zgoda_{{$r->id}}">
                    {!! $r->text !!}
                    @error('rule_'.$r->id)
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </label>
            </div>
        @endforeach
    </div>
    <div class="col-12 d-flex justify-content-start">
        <button data-btn-submit="" type="submit" class="btn btn-primary mt-3 mt-lg-4 mb-4 btn-submit" disabled>
            Wyślij
            <svg viewBox="0 0 19.971 19.971" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(-339 -1753.9)" data-name="Group 816">
                    <g transform="translate(358.97 1753.9) rotate(90)" fill="#345e3e" stroke="#345e3e" data-name="Ellipse 20">
                        <ellipse cx="9.985" cy="9.985" rx="9.985" ry="9.985" stroke="none"/>
                        <ellipse cx="9.985" cy="9.985" rx="9.485" ry="9.485" fill="none"/>
                    </g>
                    <g transform="translate(348.98 1759.8) rotate(45)" fill="none" stroke="#fffbf5" stroke-linecap="round" stroke-linejoin="round" data-name="Icon feather-arrow-up-right">
                        <path d="M0,5.764,5.764,0" data-name="Path 14793"/>
                        <path d="m0 0h5.764v5.764" data-name="Path 14794"/>
                    </g>
                </g>
            </svg>
        </button>
    </div>
</form>
@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topLeft:0"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush