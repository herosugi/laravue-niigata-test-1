<?php

use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('entries')->insert([
        [
          'title' => 'てすとたいとる',
          'content' => 'もちろんそれぞれのモデルシーダで属性をいちいち指定するのは面倒です。代わりに大量のデータベースレコードを生成するのに便利なモデルファクトリが使用できます。最初にモデルファクトリのドキュメントを読んで、どのように定義するのかを学んでください。ファクトリが定義できれば、データベースにレコードを挿入するfactoryヘルパ関数が利用できます。',
          'created_at' => new Datetime(),
          'updated_at' => new Datetime(),
        ],
        [
          'title' => 'たいとる２',
          'content' => 'クラスの中で追加のシーダクラスを呼び出すcallメソッドが使えます。callメソッドを使うことで、圧倒されるぐらい大きな１ファイルを使う代わりに、データベースシーディングを複数のファイルへ分割できます。実行したいシーダクラス名を渡します。',
          'created_at' => new Datetime('2018-01-31'),
          'updated_at' => new Datetime(),
        ],
        [
          'title' => 'たいとる３',
          'content' => 'もしくはマイグレーションをロールバックし再実行するmigrate:refreshコマンドを使っても、データベースに初期値を設定できます。このコマンドはデータベースを完全に作成し直したい場合に便利です。',
          'created_at' => new Datetime('2018-04-10'),
          'updated_at' => new Datetime(),
        ],
      ]);
    }
}
