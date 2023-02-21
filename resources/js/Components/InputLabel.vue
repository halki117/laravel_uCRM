<script setup>
defineProps(['value', 'test']);

//defineEmitsで子から親にデータを渡す
defineEmits(['update:modelValue']);
</script>

<template>
    <label class="block font-medium text-sm text-gray-700">
        <span v-if="value">{{ value }}</span>
        <span v-else><slot /></span>
    </label>
    <div v-if="test">{{ test }}</div>

    <!-- @input は文字が入力された時点でイベント発火 -->
    <!-- $event.target.value はフォームの入力内容 -->
    <input type="text" @input="$emit('update:modelValue', $event.target.value)">
</template>
