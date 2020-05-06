<script>
    new Vue({
        el: '#appCookieSettings',
        data: {
            hideCookieAlert: null,
            acceptGoogleAnalytics: null,
            acceptGoogleMaps: null
        },
        methods: {
            reset: function () {
                this.deleteCookie('hideCookieAlert');
                this.deleteCookie('acceptGoogleAnalytics');
                this.deleteCookie('acceptGoogleMaps');
                this.deleteCookie('_ga');
                this.deleteCookie('_gid');
                this.deleteCookie('_gat');
                window.location.reload(true);
            },
            getSettingIcon: function (setting) {
                if (setting === 'true') {
                    return 'check-circle';
                }
                if (setting === 'false') {
                    return 'times-circle';
                }
            }
        },
        computed: {
            noCookieSetting: function () {
                return (this.hideCookieAlert === null) && (this.acceptGoogleAnalytics === null) && (this.acceptGoogleMaps === null);
            }
        },
        mounted: function () {
            this.hideCookieAlert = this.getCookie('hideCookieAlert');
            this.acceptGoogleAnalytics = this.getCookie('acceptGoogleAnalytics');
            this.acceptGoogleMaps = this.getCookie('acceptGoogleMaps');
        }
    });
</script>
