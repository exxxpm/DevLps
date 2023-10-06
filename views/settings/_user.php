<tr>
    <td>
        <div class="main-table__title">
            <a class="h3" href="/web/settings/edit-user/<?= $user->id ?>"><?= $user->getUsername($user->username) ?></a>
        </div>
    </td>
    <td><?= $user->getRole() ?></td>
    <td><a class="main-table__email" href="mailto:<?= $user->email ?>"><?= $user->email ?></a></td>
</tr>