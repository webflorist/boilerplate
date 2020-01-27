<template>
    <div>
        <button class="btn btn-primary btn-sm" :class="show ? 'on-hover-icons-up' : 'on-hover-icons-down'" v-on:click="toggle()">
            Karte {{ show ? 'ausblenden' : 'einblenden' }}
            <i class="far ml-2" v-bind:class="show ? 'fa-angle-up' : 'fa-angle-down'"></i>
        </button>
        <iframe
            v-if="show"
            :src="src"
            style="width:100%;height:250px;border:0" allowfullscreen=""
        ></iframe>
    </div>
</template>

<script>
    export default {
        props: {
            src: String,
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
                        html: '<p>Zur Darstellung der Karte wird der Dienst "Google Maps" des Dritt-Anbieters "Google Inc." verwendet. Ist das OK für Sie?</p><p>Wenn Sie zustimmen, werden Google Maps bezogene Cookies gesetzt und Datenverarbeitungen vorgenommen.</p><p>Mehr Informationen finden Sie in unserer <a href="/datenschutz" target="_blank">Datenschutzerklärung</a>! Dort können Sie Ihre Auswahl auch jederzeit widerrufen.</p>',
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
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
