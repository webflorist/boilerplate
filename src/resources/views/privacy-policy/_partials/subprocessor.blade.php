<li>
    <strong>{{$company}}</strong>, {{$address}}
    <ul>
        <li>{{__('webflorist-boilerplate::privacy-policy.data_purpose')}}: {{$purpose}}</li>
        <li>{{__('webflorist-boilerplate::privacy-policy.data_categories')}}: {!! implode(', ',$categories) !!}</li>
        <li>{{__('webflorist-boilerplate::privacy-policy.privacy_policy')}}: <a href="{{$privacy_policy}}" target="_blank">{{$privacy_policy}}</a></li>
    </ul>
</li>
