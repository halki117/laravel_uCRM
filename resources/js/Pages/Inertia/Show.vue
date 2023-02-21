<script setup>
import { Inertia } from '@inertiajs/inertia';

defineProps({
    id: String,
    // 一件だけ取得する際はArray型ではなくてObject型にする（Array型だとconsoleに警告文が表示される）
    blog: Object,
})

const deleteConfirm = id => {
    // console.log(id)
    Inertia.delete(`/inertia/${id}`, {
        onBefore: () => confirm('本当に削除しますか？')
    })
}
</script>

<template>
    {{ id }}<br>
    {{ blog.title }}<br>
    <button @click="deleteConfirm(blog.id)">削除</button>
</template>
