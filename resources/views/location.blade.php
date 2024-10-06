@extends('layouts.app')
@section('content')
 
<div class="googlemaps" style="text-align: center;">
    <div class="container">
        <div class="row">
            <h1 class="mt-5 mb-5 text-white">OUR LOCATION ON MAPS</h1>           
             <p style="color: #FFF">
                We are located in a prime location in Midtown Manhattan. A few blocks away from the
United Nations at 630 1st Ave.
            </p>

            <div class="locc">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6045.530401476433!2d-
                    73.97166419999999!3d40.7451918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x
                    89c25905374c68e1%3A0x2225342776e3009a!2s630%201st%20Ave.%2C%20New%20York%2C
                    %20NY%2010016!5e0!3m2!1sen!2sus!4v1727126123990!5m2!1sen!2sus" width="100%" height="600" style="border:0;border-radius: 25px;" allowfullscreen="" loading="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
   </div>
 
 @push('scripts')
 

 @endpush
@endsection