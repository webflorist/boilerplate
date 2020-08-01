<template>
    <div>
        <button :class="buttonClass" v-on:click="toggle()">
            <div class="w-5 mr-3">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marked-alt" class="svg-inline--fa fa-map-marked-alt fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z"></path></svg>
            </div>
            Karte {{ show ? 'ausblenden' : 'einblenden' }}
            <div class="w-3 ml-3">
                <svg v-if="show" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-up" class="svg-inline--fa fa-angle-up fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z"></path></svg>
                <svg v-if="!show" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path></svg>
            </div>
        </button>
        <iframe
            v-if="show"
            :src="src"
            :class="iframeClass"
            allowfullscreen=""
        ></iframe>
    </div>
</template>

<script>
    export default {
        props: {
            src: String,
            buttonClass: String,
            iframeClass: String
        },
        mounted() {
            this.show = false;
        },
        data: function () {
            return {
                show: false
            }
        },
        methods: {
            toggle: function () {
                if (!this.show && !this.isGoogleMapsAccepted()) {
                    return Swal.fire({
                        title: 'Google Maps',
                        html: '<p>Zur Darstellung der Karte wird der Dienst "Google Maps" des Dritt-Anbieters "Google Inc." verwendet.<br>Ist das OK für Sie?</p><hr class="my-3"><p class="small text-sm">Wenn Sie zustimmen, werden Google Maps bezogene Cookies gesetzt und Datenverarbeitungen vorgenommen.</p><p class="small text-sm">Mehr Informationen finden Sie in der <a href="/datenschutz" target="_blank">Datenschutzerklärung</a>! Dort können Sie Ihre Auswahl auch jederzeit widerrufen.</p>',
                        icon: "question",
                        showCancelButton: true,
                        confirmButtonColor: "#28a745",
                        cancelButtonColor: "#616161",
                        confirmButtonText: "OK",
                        cancelButtonText: "Abbrechen (Karte nicht anzeigen)"
                    }).then((result) => {
                        if(result.value) {
                            this.setCookie('acceptGoogleMaps', true, 365);
                            this.show = true
                        }
                    });
                }
                else {
                    this.show = !this.show
                }
            },
            isGoogleMapsAccepted: function () {
                return this.getCookie('acceptGoogleMaps') === 'true';
            }
        }
    }
</script>
