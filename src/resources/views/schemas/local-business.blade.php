<script type="application/ld+json">
{
    "@id": "{{$id}}",
	"@context": "https://schema.org",
	"@type": "{{$type ?? 'LocalBusiness'}}",
	"name": "{{$name}}",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "{{$address['streetAddress']}}",
		"addressLocality": "{{$address['addressLocality']}}",
		"postalCode": "{{$address['postalCode']}}",
		"addressCountry": "{{$address['addressCountry']}}
    },
	"image": [
	    "{{$image}}"
	],
	"email": "{{$email}}",
	"telephone": "{{$telephone}}",
	"url": "{{$url}}",
    "description": "{{$description}}",
}

</script>
