<?php

class SocialMedia
{
    public string $name;
}

final class facebook extends SocialMedia
{
}

// class Wa extends facebook //error karena parent sudah final
// {
// }
