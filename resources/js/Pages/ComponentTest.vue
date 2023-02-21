<script setup>
    import GuestLayout from '@/Layouts/GuestLayout.vue'
    import InputLabel from '@/Components/InputLabel.vue'

    // 子コンポーネントでイベント発生時に動作する関数
    const emitTest = e => console.log(e)
</script>

<template>
    <GuestLayout>
        <!-- @子コンポーネントで定義したイベント名 = "親の方で実行したいメソッド" -->
        <InputLabel
            value="valueデータをコンポーネントに渡す"
            test="testデータをコンポーネントに渡す"
            @update:modelValue="emitTest"
            >aaa</InputLabel>
    </GuestLayout>
</template>
