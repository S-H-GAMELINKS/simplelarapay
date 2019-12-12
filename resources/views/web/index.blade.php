<form action="/token" method="post">
    @csrf
    <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="{{ ENV('PAYJP_PUBLIC_KEY') }}" data-on-created="onCreated" data-text="支払う" data-submit-text="支払う" data-partial="true"></script>
    <input type="submit" value="送信する">
</form>