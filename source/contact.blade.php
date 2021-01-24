@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <div class="w3-content" style="max-width:1564px">
        <div class="w3-container" id="contact">
            <h1 class="w3-border-bottom w3-padding-16">Contact</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
              occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
            </p>

        <div class="w3-container w3-padding-large w3-light-grey" id="contact-form">
            <div class="w3-row-padding" style="margin:10px -8px">
                <div class="w3-center w3-teal w3-padding">
                    <p><i class="fa fa-envelope w3-xlarge w3-text-light-grey"></i></p>
                    <p>ra.team.ngq@gmail.com</p>
                </div>
            </div>
            <hr class="w3-opacity">
            <form action="/action_page.php" target="_blank">
                <div class="w3-section">
                    <label>Name</label>
                    <input class="w3-input w3-border" type="text" name="Name" required>
                </div>
                <div class="w3-section">
                    <label>Email</label>
                    <input class="w3-input w3-border" type="text" name="Email" required>
                </div>
                <div class="w3-section">
                    <label>Message</label>
                    <input class="w3-input w3-border" type="text" name="Message" required>
                </div>
                <button type="submit" class="w3-button w3-dark-grey w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
            </form>
        </div>
    </div>
@endsection
