# PHP AWS SDK Helper

## Description

AWS SDK のタイプヒントが全て `array $args = []` なのは開発体験が悪いため、array-shapes 記法で生成できるようにしたものです。
要するに https://github.com/RikudouSage/AwsSdkPhpstan の array-shapes 版です。

phpstorm は同じ名前空間・同じクラス名を見つけるとマージしてコード補完してくれるので、どこかに吐き出せばそれで十分なのです。
なので SDK 側で返すべき Client を差し替えたりラップする必要はありません。
そもそも `src/Client` 以下のクラスが実行されることすらありません。完全にコード補完のためだけに存在します。

その他、AWS 関係の個人用の何らかのヘルパークラスがありますが、基本的には上記の使い方のみです。

## Usage

```
composer exec generate S3 EC2*
```

などすると Client 定義が吐き出され、かつ AWS SDK の Client 側が phpstorm 内で無効になります。
サービスを指定しないと全 Client が吐き出されます。

## License

MIT

## Release

バージョニングは romantic versioning に準拠します（semantic versioning ではありません）。

- メジャー: 大規模な互換性破壊の際にアップします（アーキテクチャ、クラス構造の変更など）
- マイナー: 小規模な互換性破壊の際にアップします（引数の変更、小規模破壊を伴う修正など）
- パッチ: 互換性破壊はありません（デフォルト引数の追加や、新たなクラスの追加、コードフォーマットなど）

### 1.2.1

- [feature] S3Helper を追加
- [feature] Helper で微妙に定義が異なる型を埋め込む必要があるので shape をエクスポートする機能
- [fixbug] interface/trait も読み込まないと完全に互換の型にならない

### 1.2.0

- [*fixbug] README に嘘が書かれていたので修正
- [fixbug] extends \Aws\AwsClient しないと getCommand とか getPaginator などでエラーが出る

### 1.1.0

- [feature] 一括で phpstorm の管理外にするバッチ
- [change] psalm-type にしたら phpstorm が固まってしまったので全出力は止めて選択制にする
- [feature] psalm-type に変更
- [feature] phpstorm で array[] に array を与えると警告が出る
- [fixbug] 名前空間のミス

### 1.0.0

- 公開
