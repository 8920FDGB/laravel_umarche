<x-tests.app>
  <x-slot name="header">
    ヘッダー1
  </x-slot>
コンポーネントテスト１

  <x-tests.card title="タイトル1" content="本文" :message="$message1" />
  <x-tests.card title="タイトル2"  />

</x-tests.app>
