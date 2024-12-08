<?php
/**
 * The component for the single text input.
 *
 * @param array $option The array of options for the input.
 * @param string $option['label'] The label of the input.
 * @param string $option['required'] The required flag of the input.
 * @param string $option['name'] The name of the input.
 * @param string $option['isLast'] The flag to determine if the input is the last one.
 * @param string $option['ratio'] The ratio of the image.
 * @param string $option['mockupImage'] The path to the mockup image.
 */
?>
@props(['option' => []])
<div class="{{ isset($option['isLast']) && trim($option['isLast']) === 'on' ? 'mb-4' : 'mb-10' }}">
    <div class="flex items-center gap-2 mb-2">
        <label class="block text-sm font-medium text-gray-700">{{ $option['label'] }}</label>
        @if( trim($option['required']) === 'on' )
        <span class="inline-flex items-center bg-green-500 px-2 py-1 text-xs font-medium text-white ml-2">必須</span>
        @endif
    </div>
    <p class="text-sm text-gray-600 mb-3">※「幅：横={{ $option['ratio'] }}」にて画像をアップロードしてください。</p>

    <div class="flex justify-start items-start space-x-20 space-y-4 flex-wrap">
        <!-- アップロードエリア -->
        <div class="sm:w-1/3 w-full">
            <label for="{{ $option['name'] }}" class="relative block cursor-pointer image-upload-label" data-form-id="{{ $option['name'] }}">
                <div class="flex items-center justify-between w-full px-2 py-3 bg-white border border-gray-200 rounded-md hover:bg-gray-50">
                    <span class="text-sm text-gray-600 file-name">画像をアップロードしてください</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
                <input id="{{ $option['name'] }}" name="{{ $option['name'] }}" type="file" class="sr-only image-upload" accept="image/*">
            </label>
            <div class="preview-container mt-4 hidden">
                <img src="" alt="プレビュー" class="w-full h-auto rounded-md preview-image">
                <button type="button" class="remove-image mt-2 px-3 py-1 bg-red-500 text-white rounded-md text-sm">削除</button>
            </div>
            <p class="error-message mt-2 text-sm text-red-600 hidden"></p>
        </div>

        <!-- スマートフォンモックアップ -->
        <div class="block w-[240px] flex-shrink-0">
            <img src="{{ url('storage/' . $option['mockupImage']) }}" alt="スマートフォン表示イメージ" class="w-full">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function setupImageUpload(formId) {
            const form = document.querySelector(`[data-form-id="${formId}"]`).closest('.mb-28');
            const fileUpload = form.querySelector('.image-upload');
            const fileName = form.querySelector('.file-name');
            const previewContainer = form.querySelector('.preview-container');
            const previewImage = form.querySelector('.preview-image');
            const removeButton = form.querySelector('.remove-image');
            const errorMessage = form.querySelector('.error-message');

            fileUpload.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    if (file.size > 10 * 1024 * 1024) {
                        showError('ファイルサイズは10MB以下にしてください。');
                        return;
                    }
                    if (!file.type.startsWith('image/')) {
                        showError('画像ファイルを選択してください。');
                        return;
                    }
                    fileName.textContent = file.name;
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewContainer.classList.remove('hidden');
                    }
                    reader.readAsDataURL(file);
                    errorMessage.classList.add('hidden');
                }
            });

            removeButton.addEventListener('click', function() {
                fileUpload.value = '';
                fileName.textContent = '画像をアップロードしてください';
                previewContainer.classList.add('hidden');
                previewImage.src = '';
            });

            function showError(message) {
                errorMessage.textContent = message;
                errorMessage.classList.remove('hidden');
                fileUpload.value = '';
                fileName.textContent = '画像をアップロードしてください';
                previewContainer.classList.add('hidden');
            }
        }

        // 各フォームに対してセットアップを実行
        document.querySelectorAll('.image-upload-label').forEach(label => {
            setupImageUpload(label.dataset.formId);
        });
    });
</script>
