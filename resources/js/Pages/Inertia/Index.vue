<script setup>
</script>
<template>
<!-- フラッシュメッセージの内容は$page.props.flash.messageで参照できる -->
<div v-if="$page.props.flash.message" class="bg-blue-300">
    {{ $page.props.flash.message }}
</div>

aaaaaaavvv
</template>
