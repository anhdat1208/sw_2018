<div class="form-contact" id="contactForm">
    <button class="close-button" onclick="toggleContact()"><span class="lnr lnr-arrow-left"></span></button>
    <p class="mb-4">{{ __('contact.subtitle') }}</p>
    <form class="form-default contact-form" action="{{ route('contact.send') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="inputCompany">{{ __('contact.label.company') }}</label>
            <input type="text" class="form-control" id="inputCompany" name="company" value="{{ old('company') }}" />
        </div>
        <div class="form-group">
            <label for="inputName">{{ __('contact.label.your_name') }}<abbr title="Required">*</abbr></label>
            <input type="text" class="form-control" id="inputName" name="name" value="{{ old('name') }}" required />
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="inputFunction">{{ __('contact.label.function') }}</label>
                <input type="text" class="form-control" id="inputFunction" name="function" value="{{ old('function') }}" />
            </div>
            <div class="col-md-6 form-group">
                <label for="inputFunction">{{ __('contact.label.email') }}<abbr title="Required">*</abbr></label>
                <input type="email" class="form-control" id="inputFunction" name="email" value="{{ old('email') }}" required />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="inputFunction">{{ __('contact.label.phone') }}<abbr title="Required">*</abbr></label>
                <input type="text" class="form-control" id="inputFunction" name="phone" value="{{ old('phone') }}" required />
            </div>
            <div class="col-md-6 form-group">
                <label for="inputFunction">{{ __('contact.label.mobile') }}<abbr title="Required">*</abbr></label>
                <input type="text" class="form-control" id="inputFunction" name="mobile" value="{{ old('mobile') }}" required />
            </div>
        </div>
        <div class="form-group">
            <label for="inputMessage">{{ __('contact.label.your_message') }}<abbr title="Required">*</abbr></label>
            <textarea class="form-control" id="inputMessage" name="message" rows="3" required>{{ old('message') }}</textarea>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-sm btn-primary">{{ __('contact.label.send') }}</button>
        </div>
    </form>
</div>
