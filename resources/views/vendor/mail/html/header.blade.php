@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            <img src="{{ url('/img/full_logo_w.png')}}" class="logo" alt="{{ $slot }}">
        </a>
    </td>
</tr>
