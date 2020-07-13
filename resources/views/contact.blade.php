@extends('layouts.layout')
@section('title', 'Contact')
@section('content')
<section id="contact" style="padding-bottom: 800px">
    <div class="container1 margin-left00">
        <div class="left2 left3">
            <a class="contact1" href="/contact">Contact</a>
        </div>
            <div class="right2">
                <div class="leftside left-margin">
                    <img src="/images/icon_phone.jpg" alt="">
                        <div class="text123">
                            tel: +1 604 765 8831
                        </div>
                            <div class="leftside1">
                                <img src="/images/icon_email.jpg" alt="">
                                <div class="text12">
                                   <a href="">hello@thesum.ca</a> 
                                </div>
                            </div>
                                <div class="leftside2">
                                    <img src="/images/icon_mail.jpg" alt="">
                                    <div class="text1234">
                                    #105 - 1010 Chilco Street
                                    <br>
                                    Vancouver, British Columbia
                                    <br>
                                	Canada, V6G 2R6
                                    </div>
                                </div>
                        <div class="mainsection">
                            <div class="line">
                                <span class="hero1">Say Hello!</span>
                               <div class="class">
                               <h4>
                                    Comments? Suggestions? Interesting projects?
                                </h4>
                                Please drop us a line using our email form or just stay 
                                <br>
                                in the loop by joining our mailing list.
                                </div> 
                                <div class="contactform">
                                    <form action="">
                                        <p>
                                            <label for="name">Name</label>
                                            <br>
                                            <input type="text" name="name">
                                        </p>
                                        <p>
                                            <label for="email">Email</label>
                                            <br>
                                            <input type="text" name="email">
                                        </p>
                                        <p>
                                            <label for="message">Message</label>
                                            <br>
                                            <textarea name="message" id="" cols="60" rows="10"></textarea>
                                        </p>
                                        <input type="submit" name="submit" class="submit">
                                    </form>
                                </div> 
                            </div>
                        </div>
                </div>

            </div>
    </div>
</section>




@endsection