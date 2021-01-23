@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <div class="w3-content" style="max-width:1564px">
        <div class="w3-container" id="contact">
            <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
              occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat <b>@ ra.team.ngq@gmail.com</b>
            </p>
            <div class="form-container">
                <form action="https://formcarry.com/s/{{ $page->services->formcarry }}" method="post">
                    <div>
                        <label for="sender">Your Name:</label><br>
                        <input type="text" name="sender" id="sender" maxlength="50" required>
                    </div>

                    <div>
                        <label for="email">Email address:</label><br>
                        <input type="email" name="email" id="email" maxlength="50" required>
                    </div>

                    <div>
                        <label for="message">Message:</label><br>
                        <textarea name="message" id="message" rows="10" maxlength="6000" required></textarea>
                    </div>

                    <input type="text" name="_gotcha" style="display: none;">

                    <input type="submit" name="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
@endsection
