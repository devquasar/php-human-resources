<!-- <div class="media mb-2">
    <a href="{{ route('profile.index', ['username' => $user->username]) }}">
        <img src="{{ $user->getAvatarUrl() }}" class="mr-3" alt="{{ $user->getNameOrUsername() }}">
    </a>
    <div class="media-body">
      <h5 class="mt-0">
          <a href="{{ route('profile.index', ['username' => $user->username]) }}">{{ $user->getNameOrUsername() }}</a>
      </h5>

      @if ($user->address)
          <p>{{ $user->address }}</p>
      @endif

    </div>
</div> -->


    
<tr>
    <td>1</td>
    <td>
        <a href="{{ route('profile.index', ['username' => $user->username]) }}">
            <img src="{{ $user->getAvatarUrl() }}" class="mr-3" alt="{{ $user->getNameOrUsername() }}">
            {{ $user->getNameOrUsername() }}

        </a>
    </td>
    <td>04/10/2013</td>                        
    <td>Admin</td>
	<td>
        <span class="status text-success">&bull;</span> Active
    </td>
	<td>
        <a href="#" class="settings" title="Settings" 
           data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
        <a href="#" class="delete" title="Delete" 
           data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
	</td>
</tr>                          		                            