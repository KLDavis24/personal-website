<div class="website-inquiry-container" style="font-family: Oswald; color: #000;">

    <div class="gunslinger-email-header">
        <p style="font-style: italic; color: #000; font-size: 2vw; font-weight: bold;">Somebody thought you were cool enough to reach out to you on the website!</p>
    </div>

    <div class="gunslinger-email-body">
        <p style="font-weight: bold; color: #000;">
            Contact Info:<br>
            Name: {{ $post->name }}<br>
            Email: {{ $post->email }}<br>
            Phone: {{ $post->phone }}
        </p>
        <p style="font-weight: bold; color: #000;">
            Here's what they had to say:<br>
            {{ $post->message }}
        </p>
    </div>

</div>