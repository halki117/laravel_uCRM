<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

// コントローラー側でバリデーションに引っかかった場合errorsという変数が渡ってくる
defineProps({
    errors: Object
})

const form = reactive({
    title: null,
    content: null,
})

const submitFunction = ()=>{
    Inertia.post('/inertia', form)
}
</script>


<template>
    <form @submit.prevent="submitFunction">
        <input type="text" name="title" v-model="form.title"><br>
        <!-- バリデーションメッセージの表示 -->
        <div v-if="errors.title">{{ errors.title }}</div>
        <input type="text" name="content" v-model="form.content"><br>
        <!-- バリデーションメッセージの表示 -->
        <div v-if="errors.content">{{ errors.content }}</div>
        <button>送信</button>
    </form>
</template>
