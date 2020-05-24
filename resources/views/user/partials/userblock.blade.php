 <tr>
    <td>1</td>
    <td>
        <a href="{{ route('profile.edit', $user->id) }}">
            <img src="{{ $user->getAvatarUrl() }}" class="mr-3" alt="{{ $user->getNameOrUsername() }}">
            <div>{{ $user->getNameOrUsername() }} </div>
        </a>
    </td>

    <td>
        <span>{{ $user->getPhoneNumber() }}</span>
    </td> 

    <td> 
        <span>
            {{ $user->getBirthDate() }}
        </span>
    </td>

    <td>
        <span>
            {{ $user->getStartWork() }}
        </span>
    </td>

    <td>
        <span>
            {{ $user->getEndWork() }}
        </span>
    </td>

    <td>
        <span>
            {{ $user->getAddress() }}
        </span>
    </td>

	<td>
        <a href="#" class="settings" title="Редактировать" 
           data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
        <a href="#" class="delete" title="Удалить" 
           data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
	</td>
</tr>                          		                            