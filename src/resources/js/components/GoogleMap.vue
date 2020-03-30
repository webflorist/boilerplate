<template>
    <div>
        <button :class="buttonClass" v-on:click="toggle()">
            <i class="far mr-2 fa-map-marked-alt"></i>
            Karte {{ show ? 'ausblenden' : 'einblenden' }}
            <i class="far ml-2" v-bind:class="show ? 'fa-angle-up' : 'fa-angle-down'"></i>
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
