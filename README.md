# Probably Unique Identifier (PUID)
Probably Unique Identifier (PUID)

## Why?

I like the idea of [ULID](https://github.com/ulid/spec), but 26 character string can be too long for some scenarios.

So why don't we remove the timestamp from `ULID`, and reduce the randomness bits.
