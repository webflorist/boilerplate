<script>
    new Vue({
        el: '#appCookieSettings',
        data: {
            acceptCookies: null,
            acceptGoogleMaps: null
        },
        methods: {
            reset: function () {
                this.deleteCookie('acceptCookies');
                this.deleteCookie('acceptGoogleMaps');
                this.deleteCookie('_ga');
                this.deleteCookie('_gid');
                this.deleteCookie('_gat');
                window.location.reload(true);
            },
            getSettingIcon: function (setting) {
                if (setting === null) {
                    return 'question-circle';
                }
                if (setting === 'true') {
                    return 'comment-check';
                }
                if (setting === 'false') {
                    return 'comment-slash';
                }
            }
        },
        mounted: function () {
            this.acceptCookies = this.getCookie('acceptCookies');
            this.acceptGoogleMaps = this.getCookie('acceptGoogleMaps');
        }
    });
</script>
