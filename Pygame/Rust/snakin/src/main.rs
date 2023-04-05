// Amethyst

use amethyst::{
    prelude::*,
    renderer::{
        plugins::{RenderFlat2D, RenderToWindow},
        types::DefaultBackend,
        RenderingBundle,
    },
    utils::application_root_dir,
};

/// Game State
pub  struct Pong;

impl SimpleState for Pong { }

fn main() -> amethyst::Result<()> {
    println!("Hello, world!");
}
