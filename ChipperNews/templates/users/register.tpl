{include file='common/header.tpl'}
{block name=content}
<div class="ink-grid content-drawer">
  <form action="{$BASE_URL}actions/users/register.php"
        class="ink-form ink-formvalidator xlarge-60 large-70 medium-90 all-100 push-center quarter-vertical-padding"
        enctype="multipart/form-data" method="post" data-lang="en_GB">
    {include file='users/register-form.tpl'}
  </form>
</div>
{/block}
{block name=footer}
{/block}
