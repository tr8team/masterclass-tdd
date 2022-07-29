{ nixpkgs ? import <nixpkgs> { } }:
let pkgs = import ./packages.nix { inherit nixpkgs; }; in
with pkgs;
{
  system = [
    coreutils
    gnugrep
    jq
    gnused
  ];

  dev = [
    phpstorm
    git
  ];

  main = [
    php
    composer
    pls
    docker
    mysql57
  ];
  ci = [
  ];
  lint = [
    pre-commit
    nixpkgs-fmt
    prettier
    shfmt
    shellcheck
    hadolint
    php-cs-fixer
  ];

}
