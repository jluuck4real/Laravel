import pathlib
import re

root = pathlib.Path(__file__).resolve().parent
patterns = [
    re.compile(r'(?s){{--.*?--}}'),
    re.compile(r'(?s)<!--.*?-->'),
    re.compile(r'(?s)/\*.*?\*/'),
    re.compile(r'(?m)^[ \t]*(//|#).*\n?'),
]

files = []
for ext in ['*.php', '*.blade.php', '*.css', '*.js']:
    for path in root.rglob(ext):
        if 'vendor' in path.parts:
            continue
        files.append(path)

modified = 0
for path in files:
    text = path.read_text(encoding='utf-8')
    original = text
    for pattern in patterns:
        text = pattern.sub('', text)
    if text != original:
        path.write_text(text, encoding='utf-8')
        modified += 1

print(f'Processed {len(files)} files, modified {modified} files.')
