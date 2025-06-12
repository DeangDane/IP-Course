import { Field, Int, ObjectType } from '@nestjs/graphql';

// hotel/entities/hotel.entity.ts
@ObjectType()
export class Hotel {
  @Field(() => Int)
  id: number;

  @Field()
  name: string;

  @Field()
  address: string;

  @Field()
  phone: string;
}
