@extends('Layouts.layout')
        
@section('content')
<div class="page-content-heading">
    <h1> GET IN TOUCH</h1>
    <p><a href="#">Home</a> <span>•</span> Contact</p>
</div>

<section class="contact">
    <div class="container-center"> 
        <div class="contact-form-wrapper">
            <form action="" method="">
                <div>
                    <div class="input-container half-input">
                        <label>First Name</label> <br>
                        <input type="text" name="">
                    </div>
                    <div class="input-container half-input right">
                        <label>Last Name</label> <br>
                        <input type="text" name="">
                    </div>
                </div>
                
                <div class="input-container">
                    <label>Email</label> <br>
                    <input type="text" name="">
                </div>
                <div class="input-container">
                    <label>Subject</label> <br>
                    <input type="text" name="">
                </div>
                <div class="input-container">
                    <label>Message</label> <br>
                    <textarea cols="30" rows="7" name="" placeholder="Write your notes or questions here..." class="input-container"></textarea>
                </div>
                <div class="input-container centered">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

        <div class="contact-info-wrapper">
            <div class="contact-info">
                <div>
                    <h6>Address</h6>
                    <p>203 Fake St. Mountain View, San Francisco, California, USA</p>
                </div>
                <div>
                    <h6>Phone</h6>
                    <p class="light-red">+1 232 3235 324</p>
                </div>
                <div>
                    <h6>Email Address</h6>
                    <p class="light-red">youremail@domain.com</p>
                </div>
            </div>
            <div class="mini-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1510492.2337217857!2d42.236620068934464!3d42.31735632761069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgia!5e0!3m2!1sen!2sge!4v1557745851996!5m2!1sen!2sge" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>            </div>
        </div>
    </div>

</section>

@endsection