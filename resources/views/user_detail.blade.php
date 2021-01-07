
       @extends('layouts.master')
       @section('content')

   <div class="container">
      <h2>Your Social Links</h2>
      <div class="result-container">
        <input type="text" value="{{ $user_detail->url }}" class="filter" id="share_url" placeholder="Filter Posts" readonly>
        <button class="btn ctoCb" id="clipboard">
          <i class="far fa-clipboard"></i>
        </button>
      </div>
   
      <div class="social_icons">
        <div class="social_icon">
            <a id="shareWithFb"><i class="fab fa-facebook icons"></i></a>
            <a id="shareWithTwitter"><i class="fab fa-twitter icons"></i></a>
            <a id="shareWithWhatsapp"><i class="fab fa-whatsapp icons"></i></a>
            <a id="shareWithMail"><i class="fas fa-envelope icons"></i></a>
        </div>
      </div>
    </div>
    @endsection

    @push('scripts')

<script>
    let user =
        'abnation553@gmail.com';
</script>

<script>

var copiedLink = '';

    function copyToClipboard(element, btnElem) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).val()).select();
        document.execCommand("copy");
        $temp.remove();
        $(btnElem).html(`<i class="fa fa-link"> </i> `);
        setTimeout(() => {
            $(btnElem).html(`<i class="far fa-clipboard"> </i> `);
        }, 2000);
    }


    $(document).ready(function() {
        copiedLink = $('#share_url').val();

        $('#shareWithTwitter').click(function () {
        window.open("https://twitter.com/intent/tweet?url=" + copiedLink);
    });

    $('#shareWithFb').click(function () {
        window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
    });

    $('#shareWithFb').click(function () {
        window.open("https://www.facebook.com/sharer/sharer.php?u=" + copiedLink, 'facebook-share-dialog', "width=626, height=436");
    });

    $('#shareWithMail').click(function () {
        var formattedBody = "This is cause link: " + (copiedLink);
        var mailToLink = "mailto:?subject= " + user + " wants you to donate to this noble cause&body=" + encodeURIComponent(formattedBody);
        window.location.href = mailToLink;
    });

    $('#shareWithWhatsapp').click(function () {
        var win = window.open('https://api.whatsapp.com/send?text=' + copiedLink, '_blank');
        win.focus();
    });

    $(document).on('click', '.ctoCb', function () {
        copyToClipboard($(this).parent().parent().find('input'), $(this));
    });
});
</script>



@endpush