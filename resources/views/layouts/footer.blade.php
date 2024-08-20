<footer>
    <div id="footer" class="text-center">
        
        <h1>FOOTER</h1>
        <p class="copy">
            © {{ date('Y') }}. {{ config('site.company_name') }} All Rights Reserved. 
            @if(config('site.policy_link'))
                <a href="{{ config('site.policy_link') }}">Privacy Policy</a>. 
            @endif
        </p>
        <p class="silver">
            <a href="" rel="external" target="_blank">Web Design</a> Done by 
            <a href="" rel="external" target="_blank">Dream Webworks Creations Inc.</a>
            <img src="{{ asset('images/content/td.png') }}" alt="" class="company-logo td" />

        </p>
    </div>
</footer>



<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>