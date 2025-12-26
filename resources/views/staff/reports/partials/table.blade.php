@forelse ($data as $cdata)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $cdata->complaint_no }}</td>
    <td>{{ $cdata->person_name }}</td>
    <td>{{ $cdata->section->name ?? '--' }}</td>
    <td>{{ $cdata->item->name ?? '--' }}</td>
    <td>{{ $cdata->problem }}</td>
    <td>{{ $cdata->engineer->name ?? '--' }}</td>
    <td>
        @if($cdata->complaint_date instanceof \Carbon\Carbon)
            {{ $cdata->complaint_date->format('Y-m-d') }}
        @elseif(is_string($cdata->complaint_date))
            {{ date('Y-m-d', strtotime($cdata->complaint_date)) }}
        @else
            --
        @endif
    </td>
    <td>
        @if($cdata->completed_at instanceof \Carbon\Carbon)
            {{ $cdata->completed_at->format('Y-m-d') }}
        @elseif(is_string($cdata->completed_at))
            {{ date('Y-m-d', strtotime($cdata->completed_at)) }}
        @else
            --
        @endif
    </td>
</tr>
@empty
<tr>
    <td colspan="7" class="text-center">No records found</td>
</tr>
@endforelse
